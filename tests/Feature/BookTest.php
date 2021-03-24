<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Session;
use App\Book;
use App\User;
use Tests\TestCase;

class BookTest extends TestCase
{
    /**
     * Setup.
     *
     * @return void
     */
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        Session::start();
        factory(Book::class)->create();
        $this->user = factory(User::class)->create(['role' => 2]);
        $this->be($this->user); //ログインしているユーザーを設定
    }

    /**
     * Can not access view(Choise) member role.
     *
     * @return void
     */

    public function testCannnotAccessMemberRoleChoice()
    {
        $user = factory(User::class)->create(['role' => 3]); //一般ユーザー
        $response = $this->actingAs($user)->get(action('BookController@choice'));
        $response->assertStatus(403); //アクセス禁止
    }

    /**
     * Can not access view(edit) member role.
     *
     * @return void
     */

    public function testCannnotAccessMemberRoleEdit()
    {
        $book = factory(Book::class)->create();
        $user = factory(User::class)->create(['role' => 3]); //一般ユーザー
        $response = $this->actingAs($user)->get(action('BookController@edit', $book));
        $response->assertStatus(403);
    }

    /**
     * Can not access view(create_with_barcode) member role.
     *
     * @return void
     */

    public function testCannnotAccessMemberRoleCreateWithBarcode()
    {
        $user = factory(User::class)->create(['role' => 3]); //一般ユーザー
        $response = $this->actingAs($user)->get(action('BookController@create_with_barcode'));
        $response->assertStatus(403);
    }

    /**
     * Can not access view(CreateWithForm) member role.
     *
     * @return void
     */

    public function testCannnotAccessMemberRoleCreateWithForm()
    {
        $user = factory(User::class)->create(['role' => 3]); //一般ユーザー
        $response = $this->actingAs($user)->get(action('BookController@create_with_form'));
        $response->assertStatus(403);
    }

     /**
      * Book list.(Admin)
      *
      * @return void
      */
    public function testBookListAdminRole()
    {
        $admin = factory(User::class)->create(['role' => '1']);
        $book = factory(Book::class)->create();
        $response = $this->actingAs($admin)->get(action('BookController@index'));

        $response->assertOk()
            ->assertSeeText(e($book->title))
            ->assertSeeText(e($book->author))
            ->assertSeeText(e($book->published_year))
            ->assertSeeText(e($book->created_at->format('Y/m/d')));
    }

     /**
      * Book list
      *
      * @return void
      */
    public function testBookListUserRole()
    {
        $user = factory(User::class)->create(['role' => '3']);
        $book = factory(Book::class)->create();
        $response = $this->actingAs($user)->get(action('BookController@index'));

        $response->assertOk()
            ->assertSeeText(e($book->title))
            ->assertSeeText(e($book->author))
            ->assertSeeText(e($book->published_year))
            ->assertSeeText(e($book->publisher));
    }

     /**
      * Book show
      *
      * @return void
      */
    public function testBookShow()
    {
        $book = factory(Book::class)->create();
        $response = $this->get(action('BookController@show', [$book]));

        $response->assertOk()
            ->assertSeeText(e($book->title))
            ->assertSeeText(e($book->author))
            ->assertSeeText(e($book->published_year))
            ->assertSeeText(e($book->description))
            ->assertSeeText(e($book->isbn))
            ->assertSeeText(e($book->publisher))
            ->assertSeeText(e($book->created_at));
    }

     /**
      * Book store
      *
      * @return void
      */
    public function testBookStore()
    {
        $book = factory(Book::class)->make();
        $response = $this->post(
            action(
                'BookController@store'
            ),[
                'title' => $book->title,
                'author' => $book->author,
                'description' => $book->description,
                'isbn' => $book->isbn,
                'publisher' => $book->publisher,
                'published_year' => $book->published_year,
                'buyURL' => $book->buyURL,
                'imgURL' => $book->imgURL,
                '_token' => Session::token(),
            ]
        );
        $created_book = Book::all()->last();
        $this->assertEquals($book->title, $created_book->title);
        $this->assertEquals($book->author, $created_book->author);
        $this->assertEquals($book->description, $created_book->description);
        $this->assertEquals($book->isbn, $created_book->isbn);
        $this->assertEquals($book->publisher, $created_book->publisher);
        $this->assertEquals($book->buyURL, $created_book->buyURL);
        $this->assertEquals($book->imgURL, $created_book->imgURL);
        $response->assertRedirect(action('BookController@index'));
    }

     /**
      * Book store
      *
      * @return void
      */
    public function testBookUpdate()
    {
        $book = factory(Book::class)->create();
        $newbook = factory(Book::class)->make();
        $response = $this->put(
            action(
                'BookController@update', [$book]
            ),[
                'title' => $newbook->title,
                'author' => $newbook->author,
                'description' => $newbook->description,
                'isbn' => $newbook->isbn,
                'publisher' => $newbook->publisher,
                'published_year' => $newbook->published_year,
                'buyURL' => $newbook->buyURL,
                'imgURL' => $newbook->imgURL,
                '_token' => Session::token(),
            ]
        );
        $response->assertRedirect(action('BookController@index'));

        $book = $book->fresh();

        $this->assertEquals($book->title, $newbook->title);
        $this->assertEquals($book->author, $newbook->author);
        $this->assertEquals($book->description, $newbook->description);
        $this->assertEquals($book->isbn, $newbook->isbn);
        $this->assertEquals($book->publisher, $newbook->publisher);
        $this->assertEquals($book->buyURL, $newbook->buyURL);
        $this->assertEquals($book->imgURL, $newbook->imgURL);
    }

    /**
     * Book destroy.
     *
     * @return void
     */
    public function testBookDestroy()
    {
        $book = factory(Book::class)->create();

        $response = $this->delete(
            action('BookController@destroy', $book),
            ['_token' => Session::token()]
        );

        $response->assertRedirect(action('BookController@index'));

        $this->assertTrue($book->fresh()->trashed());
    }

}
