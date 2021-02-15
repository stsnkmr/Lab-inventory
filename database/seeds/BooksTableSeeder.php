<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'title' => 'タイトル1',
            'author' => '著者1',
            'publisher' => 'オライリー',
            'published_date' => '2000/1/1',
            'description' => 'ちょっといい本です。',
            'isbn' => '9784756921161',
            'imgURL' => 'https://m.media-amazon.com/images/I/61IPfkfoamL._AC_SX965_SY724_.jpg',
            'buyURL' => 'https://www.amazon.co.jp/dp/B08NV5ZR93/ref=cm_sw_em_r_mt_dp_46PGAYQ540RWVA5PYA5K',
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'タイトル2',
            'author' => '著者2',
            'publisher' => '集英社',
            'published_date' => '2020/1/1',
            'description' => '漫画です',
            'isbn' => '4910299320740',
            'imgURL' => 'http://books.google.com/books/content?id=BALOCwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api',
            'buyURL' => 'https://www.amazon.co.jp/dp/B08NV5ZR93/ref=cm_sw_em_r_mt_dp_46PGAYQ540RWVA5PYA5K',
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'タイトル0',
            'author' => 'あああ',
            'publisher' => 'オライリー',
            'published_date' => '2010/10/12',
            'description' => 'ちょっといい本です。',
            'isbn' => '9784756921161',
            'imgURL' => 'https://m.media-amazon.com/images/I/61IPfkfoamL._AC_SX965_SY724_.jpg',
            'buyURL' => 'https://www.amazon.co.jp/dp/B08NV5ZR93/ref=cm_sw_em_r_mt_dp_46PGAYQ540RWVA5PYA5K',
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'タイトル',
            'author' => 'いいいい',
            'publisher' => '集英社',
            'published_date' => '2012/2/9',
            'description' => '漫画です',
            'isbn' => '4910299320740',
            'imgURL' => 'http://books.google.com/books/content?id=BALOCwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api',
            'buyURL' => 'https://www.amazon.co.jp/dp/B08NV5ZR93/ref=cm_sw_em_r_mt_dp_46PGAYQ540RWVA5PYA5K',
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'タイトル0',
            'author' => 'あああ',
            'publisher' => 'オライリー',
            'published_date' => '2010/10/12',
            'description' => 'ちょっといい本です。',
            'isbn' => '9784756921161',
            'imgURL' => 'https://m.media-amazon.com/images/I/61IPfkfoamL._AC_SX965_SY724_.jpg',
            'buyURL' => 'https://www.amazon.co.jp/dp/B08NV5ZR93/ref=cm_sw_em_r_mt_dp_46PGAYQ540RWVA5PYA5K',
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'タイトル',
            'author' => 'いいいい',
            'publisher' => '集英社',
            'published_date' => '2012/2/9',
            'description' => '漫画です',
            'isbn' => '4910299320740',
            'imgURL' => 'http://books.google.com/books/content?id=BALOCwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api',
            'buyURL' => 'https://www.amazon.co.jp/dp/B08NV5ZR93/ref=cm_sw_em_r_mt_dp_46PGAYQ540RWVA5PYA5K',
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'タイトル0',
            'author' => 'あああ',
            'publisher' => 'オライリー',
            'published_date' => '2010/10/12',
            'description' => 'ちょっといい本です。',
            'isbn' => '9784756921161',
            'imgURL' => 'https://m.media-amazon.com/images/I/61IPfkfoamL._AC_SX965_SY724_.jpg',
            'buyURL' => 'https://www.amazon.co.jp/dp/B08NV5ZR93/ref=cm_sw_em_r_mt_dp_46PGAYQ540RWVA5PYA5K',
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'タイトル',
            'author' => 'いいいい',
            'publisher' => '集英社',
            'published_date' => '2012/2/9',
            'description' => '漫画です',
            'isbn' => '4910299320740',
            'imgURL' => 'http://books.google.com/books/content?id=BALOCwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api',
            'buyURL' => 'https://www.amazon.co.jp/dp/B08NV5ZR93/ref=cm_sw_em_r_mt_dp_46PGAYQ540RWVA5PYA5K',
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'タイトル0',
            'author' => 'あああ',
            'publisher' => 'オライリー',
            'published_date' => '2010/10/12',
            'description' => 'ちょっといい本です。',
            'isbn' => '9784756921161',
            'imgURL' => 'https://m.media-amazon.com/images/I/61IPfkfoamL._AC_SX965_SY724_.jpg',
            'buyURL' => 'https://www.amazon.co.jp/dp/B08NV5ZR93/ref=cm_sw_em_r_mt_dp_46PGAYQ540RWVA5PYA5K',
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'タイトル',
            'author' => 'いいいい',
            'publisher' => '集英社',
            'published_date' => '2012/2/9',
            'description' => '漫画です',
            'isbn' => '4910299320740',
            'imgURL' => 'http://books.google.com/books/content?id=BALOCwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api',
            'buyURL' => 'https://www.amazon.co.jp/dp/B08NV5ZR93/ref=cm_sw_em_r_mt_dp_46PGAYQ540RWVA5PYA5K',
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'タイトル0',
            'author' => 'あああ',
            'publisher' => 'オライリー',
            'published_date' => '2010/10/12',
            'description' => 'ちょっといい本です。',
            'isbn' => '9784756921161',
            'imgURL' => 'https://m.media-amazon.com/images/I/61IPfkfoamL._AC_SX965_SY724_.jpg',
            'buyURL' => 'https://www.amazon.co.jp/dp/B08NV5ZR93/ref=cm_sw_em_r_mt_dp_46PGAYQ540RWVA5PYA5K',
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'タイトル',
            'author' => 'いいいい',
            'publisher' => '集英社',
            'published_date' => '2012/2/9',
            'description' => '漫画です',
            'isbn' => '4910299320740',
            'imgURL' => 'http://books.google.com/books/content?id=BALOCwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api',
            'buyURL' => 'https://www.amazon.co.jp/dp/B08NV5ZR93/ref=cm_sw_em_r_mt_dp_46PGAYQ540RWVA5PYA5K',
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'タイトル0',
            'author' => 'あああ',
            'publisher' => 'オライリー',
            'published_date' => '2010/10/12',
            'description' => 'ちょっといい本です。',
            'isbn' => '9784756921161',
            'imgURL' => 'https://m.media-amazon.com/images/I/61IPfkfoamL._AC_SX965_SY724_.jpg',
            'buyURL' => 'https://www.amazon.co.jp/dp/B08NV5ZR93/ref=cm_sw_em_r_mt_dp_46PGAYQ540RWVA5PYA5K',
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'タイトル',
            'author' => 'いいいい',
            'publisher' => '集英社',
            'published_date' => '2012/2/9',
            'description' => '漫画です',
            'isbn' => '4910299320740',
            'imgURL' => 'http://books.google.com/books/content?id=BALOCwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api',
            'buyURL' => 'https://www.amazon.co.jp/dp/B08NV5ZR93/ref=cm_sw_em_r_mt_dp_46PGAYQ540RWVA5PYA5K',
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'タイトル0',
            'author' => 'あああ',
            'publisher' => 'オライリー',
            'published_date' => '2010/10/12',
            'description' => 'ちょっといい本です。',
            'isbn' => '9784756921161',
            'imgURL' => 'https://m.media-amazon.com/images/I/61IPfkfoamL._AC_SX965_SY724_.jpg',
            'buyURL' => 'https://www.amazon.co.jp/dp/B08NV5ZR93/ref=cm_sw_em_r_mt_dp_46PGAYQ540RWVA5PYA5K',
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'タイトル',
            'author' => 'いいいい',
            'publisher' => '集英社',
            'published_date' => '2012/2/9',
            'description' => '漫画です',
            'isbn' => '4910299320740',
            'imgURL' => 'http://books.google.com/books/content?id=BALOCwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api',
            'buyURL' => 'https://www.amazon.co.jp/dp/B08NV5ZR93/ref=cm_sw_em_r_mt_dp_46PGAYQ540RWVA5PYA5K',
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'タイトル0',
            'author' => 'あああ',
            'publisher' => 'オライリー',
            'published_date' => '2010/10/12',
            'description' => 'ちょっといい本です。',
            'isbn' => '9784756921161',
            'imgURL' => 'https://m.media-amazon.com/images/I/61IPfkfoamL._AC_SX965_SY724_.jpg',
            'buyURL' => 'https://www.amazon.co.jp/dp/B08NV5ZR93/ref=cm_sw_em_r_mt_dp_46PGAYQ540RWVA5PYA5K',
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'タイトル',
            'author' => 'いいいい',
            'publisher' => '集英社',
            'published_date' => '2012/2/9',
            'description' => '漫画です',
            'isbn' => '4910299320740',
            'imgURL' => 'http://books.google.com/books/content?id=BALOCwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api',
            'buyURL' => 'https://www.amazon.co.jp/dp/B08NV5ZR93/ref=cm_sw_em_r_mt_dp_46PGAYQ540RWVA5PYA5K',
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'タイトル0',
            'author' => 'あああ',
            'publisher' => 'オライリー',
            'published_date' => '2010/10/12',
            'description' => 'ちょっといい本です。',
            'isbn' => '9784756921161',
            'imgURL' => 'https://m.media-amazon.com/images/I/61IPfkfoamL._AC_SX965_SY724_.jpg',
            'buyURL' => 'https://www.amazon.co.jp/dp/B08NV5ZR93/ref=cm_sw_em_r_mt_dp_46PGAYQ540RWVA5PYA5K',
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'タイトル',
            'author' => 'いいいい',
            'publisher' => '集英社',
            'published_date' => '2012/2/9',
            'description' => '漫画です',
            'isbn' => '4910299320740',
            'imgURL' => 'http://books.google.com/books/content?id=BALOCwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api',
            'buyURL' => 'https://www.amazon.co.jp/dp/B08NV5ZR93/ref=cm_sw_em_r_mt_dp_46PGAYQ540RWVA5PYA5K',
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'タイトル0',
            'author' => 'あああ',
            'publisher' => 'オライリー',
            'published_date' => '2010/10/12',
            'description' => 'ちょっといい本です。',
            'isbn' => '9784756921161',
            'imgURL' => 'https://m.media-amazon.com/images/I/61IPfkfoamL._AC_SX965_SY724_.jpg',
            'buyURL' => 'https://www.amazon.co.jp/dp/B08NV5ZR93/ref=cm_sw_em_r_mt_dp_46PGAYQ540RWVA5PYA5K',
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'タイトル',
            'author' => 'いいいい',
            'publisher' => '集英社',
            'published_date' => '2012/2/9',
            'description' => '漫画です',
            'isbn' => '4910299320740',
            'imgURL' => 'http://books.google.com/books/content?id=BALOCwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api',
            'buyURL' => 'https://www.amazon.co.jp/dp/B08NV5ZR93/ref=cm_sw_em_r_mt_dp_46PGAYQ540RWVA5PYA5K',
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'タイトル0',
            'author' => 'あああ',
            'publisher' => 'オライリー',
            'published_date' => '2010/10/12',
            'description' => 'ちょっといい本です。',
            'isbn' => '9784756921161',
            'imgURL' => 'https://m.media-amazon.com/images/I/61IPfkfoamL._AC_SX965_SY724_.jpg',
            'buyURL' => 'https://www.amazon.co.jp/dp/B08NV5ZR93/ref=cm_sw_em_r_mt_dp_46PGAYQ540RWVA5PYA5K',
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'タイトル',
            'author' => 'いいいい',
            'publisher' => '集英社',
            'published_date' => '2012/2/9',
            'description' => '漫画です',
            'isbn' => '4910299320740',
            'imgURL' => 'http://books.google.com/books/content?id=BALOCwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api',
            'buyURL' => 'https://www.amazon.co.jp/dp/B08NV5ZR93/ref=cm_sw_em_r_mt_dp_46PGAYQ540RWVA5PYA5K',
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'タイトル0',
            'author' => 'あああ',
            'publisher' => 'オライリー',
            'published_date' => '2010/10/12',
            'description' => 'ちょっといい本です。',
            'isbn' => '9784756921161',
            'imgURL' => 'https://m.media-amazon.com/images/I/61IPfkfoamL._AC_SX965_SY724_.jpg',
            'buyURL' => 'https://www.amazon.co.jp/dp/B08NV5ZR93/ref=cm_sw_em_r_mt_dp_46PGAYQ540RWVA5PYA5K',
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'タイトル',
            'author' => 'いいいい',
            'publisher' => '集英社',
            'published_date' => '2012/2/9',
            'description' => '漫画です',
            'isbn' => '4910299320740',
            'imgURL' => 'http://books.google.com/books/content?id=BALOCwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api',
            'buyURL' => 'https://www.amazon.co.jp/dp/B08NV5ZR93/ref=cm_sw_em_r_mt_dp_46PGAYQ540RWVA5PYA5K',
        ];
        DB::table('books')->insert($param);
    }
}
