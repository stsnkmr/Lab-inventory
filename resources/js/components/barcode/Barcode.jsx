import React, { useState } from 'react';
import axios, { get } from 'axios';
import ReactDOM from 'react-dom';
import Scanner from './Scanner';
import './styles.css';

const Barcode = () => {
    const [scanning, setScanning] = useState(true);
    const [books, setBooks] = useState([]);

    const getBookDetails = (isbn) => {
        get('https://www.googleapis.com/books/v1/volumes?q=isbn:'+isbn).then(res => {
            console.log(res.data.totalItems);
            if (res.data.totalItems == 0) setScanning(true);
            else setBooks([...books, res.data.items[0].volumeInfo]);
        })
    }

    const onSubmit = () => {
        books.map((book) => {
            var params = new URLSearchParams();
            params.append('title', book.title);
            params.append('author', book.authors);
            params.append('description', book.description);
            params.append('isbn', book.industryIdentifiers.identifier);
            params.append('publisher', book.publisher);
            params.append('published_date', book.publishedDate);
            params.append('imgURL', book.imageLinks.thumbnail);
            params.append('buyURL', book.infoLink);
            axios.post('/book', params);
            console.log("成功!"+book.title);
        })
        setBooks([])
    }

    const removeBook = (target) => {
        books.splice(target, 1);
        console.log(books);
        setBooks([...books]);
    }

    return (
        <>
            <div className="row">
                <div className="col-md-6">
                    <button onClick={() => setScanning(!scanning)} className={scanning ? 'btn btn-secondary btn-block' : 'btn btn-primary btn-block'}>
                        {scanning ? 'Stop' : 'Start'}
                    </button>
                    {scanning ? <Scanner setStop={() => setScanning(false)} onDetected={(result) => getBookDetails(result.codeResult.code)} /> : null}
                </div>
                <div className="col-md-6">
                    <button onClick={(result) => onSubmit(result)} className="btn btn-primary btn-block">登録</button>
                    <table className="table">
                        <tbody className="overflow-scroll">
                            { books.map((book, index) =>
                                <tr key={index}>
                                    <td>{ index + 1 }</td>
                                    <td>{ book.title }</td>
                                    <td><button className="btn btn-danger" onClick={() => removeBook(index)}>×</button></td>
                                </tr>
                                )}
                        </tbody>
                    </table>
                    <a href="/book"><button onClick={(result) => onSubmit(result)} className="btn btn-secondary btn-block">戻る</button></a>
                </div>
            </div>
        </>
    )
}
ReactDOM.render(<Barcode />, document.getElementById('barcode'))
