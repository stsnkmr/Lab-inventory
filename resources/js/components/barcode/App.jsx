import React, { useState } from 'react';
import axios, { get } from 'axios';
import ReactDOM from 'react-dom';
import Scanner from './Scanner';
import './styles.css';

const App = () => {
    const [scanning, setScanning] = useState(true);
    const [books, setBooks] = useState([]);
    const [results, setResults] = useState("");
    const getBookDetails = (isbn) => {
        get('https://www.googleapis.com/books/v1/volumes?q=isbn:'+isbn).then(res => {
            try{
                console.log(isbn);
                const detail = res.data.items[0].volumeInfo;
                setBooks([...books, detail]);
            }
            catch {
                console.log("バーコード読み取りエラー");
            }
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
        location.href = "/book";
    }

    return (
    <>
        <div className="row">
            <div className="col-md-6">
                <div className="text-center">
                    <button onClick={() => setScanning(!scanning)} className={scanning ? 'btn btn-secondary btn-block' : 'btn btn-primary btn-block'}>
                        {scanning ? 'Stop' : 'Start'}
                    </button>
                    <button onClick={(result) => onSubmit(result)} className="btn btn-primary btn-block">登録</button>
                    <a href="/book"><button onClick={(result) => onSubmit(result)} className="btn btn-secondary btn-block">戻る</button></a>
                </div>
                <table className="table">
                    <tbody className="overflow-scroll">
                    {books ? books.map((book, i) =>
                        <tr key={i}>
                            <td>{ i + 1 }</td>
                            <td>{ book.title }</td>
                        </tr>
                    )
                    : <tr><td>まだありませんよ！！！</td></tr>}
                    </tbody>
                </table>
            </div>
            <div className="col-md-6">
                {scanning ? <Scanner onDetected={(result) => getBookDetails(result.codeResult.code)} /> : null}
            </div>
        </div>
    </>
    )
}

// export default App
ReactDOM.render(<App />, document.getElementById('barcode'))
