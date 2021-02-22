<?php

Breadcrumbs::for('home', function ($trail) {
    $trail->push('ホーム', url('home'));
});

// ホーム > 本の一覧
Breadcrumbs::for('books', function ($trail) {
    $trail->parent('home');
    $trail->push('本の一覧', url('books'));
});

// ホーム > 本の一覧 >  [Title]
Breadcrumbs::for('showBook', function ($trail, $book) {
    $trail->parent('books');
    $trail->push($book->book_title, url('books/' . $book->id));

});

// ホーム > 本の一覧 >  [Title]  > 編集
Breadcrumbs::for('editBook', function ($trail, $book) {
    $trail->parent('showBook', $book);
    $trail->push('編集', url('books/' . $book->id .'/edit'));
});
