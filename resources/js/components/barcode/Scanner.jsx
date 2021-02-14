// import React, { Component, useLayoutEffect, useEffect, useCallback } from 'react';
// import Quagga from '@ericblade/quagga2';

// function getMedian(arr) {
//     arr.sort((a, b) => a - b);
//     const half = Math.floor(arr.length / 2);
//     if (arr.length % 2 === 1) {
//         return arr[half];
//     }
//     return (arr[half - 1] + arr[half]) / 2;
// }

// function getMedianOfCodeErrors(decodedCodes) {
//     const errors = decodedCodes.filter(x => x.error !== undefined).map(x => x.error);
//     const medianOfErrors = getMedian(errors);
//     return medianOfErrors;
// }

// const Scanner = ({
//     onDetected,
// }) => {
//     const errorCheck = useCallback((result) => {
//         if (!onDetected) {
//             return;
//         }
//     const err = getMedianOfCodeErrors(result.codeResult.decodedCodes);
//     if (err < 0.2) {
//         onDetected(result.codeResult.code);
//     }}, [onDetected]);

//     useLayoutEffect(() => {
//         Quagga.init({
//             inputStream: {
//                 type: 'LiveStream',
//                 constraints: {
//                     facingMode: 'environment', // or user
//                 },
//             },
//             locator: {
//             patchSize: 'medium',
//             halfSample: true,
//             },
//             decoder: {
//             readers: ['ean_reader'],
//             },
//             locate: true,
//         },  (err) => {
//               if (err) {
//                 return console.log('Error starting Quagga:', err)
//               }
//               Quagga.start()
//               console.log("Quagga.start");
//             },
//         )
//         Quagga.onDetected(errorCheck);
//         console.log("Quagga.onDetected");
//     }, [onDetected])

//     useEffect(() => {
//         return () => {
//             Quagga.offDetected(onDetected)
//             console.log("Quagga.offDetected");
//         };
//     })
//     return <div id="interactive" className="viewport" />
// }

import React, { Component } from 'react'
import Quagga from '@ericblade/quagga2'

function getMedian(arr) {
    arr.sort((a, b) => a - b);
    const half = Math.floor(arr.length / 2);
    if (arr.length % 2 === 1) {
        return arr[half];
    }
    return (arr[half - 1] + arr[half]) / 2;
}

function getMedianOfCodeErrors(decodedCodes) {
    const errors = decodedCodes.filter(x => x.error !== undefined).map(x => x.error);
    const medianOfErrors = getMedian(errors);
    return medianOfErrors;
}

class Scanner extends Component {
    componentDidMount() {
        Quagga.init(
        {
            inputStream: {
            type: 'LiveStream',
            constraints: {
                width: 640,
                height: 480,
                facingMode: 'environment', // or user
            },
            },
            locator: {
            patchSize: 'medium',
            halfSample: true,
            },
            decoder: {
            readers: ['ean_reader'],
            },
            locate: true,
        },
        function(err) {
            if (err) {
            return console.log(err);
            }
            Quagga.start();
        },
        )
        Quagga.onDetected(this._onDetected);
    }

    componentWillUnmount() {
        Quagga.offDetected(this._onDetected);
    }

    _onDetected = result => {
        const err = getMedianOfCodeErrors(result.codeResult.decodedCodes);
        if (err < 0.1) {
            this.props.onDetected(result);
            Quagga.stop();
            this.props.setStop();
        }
    }

    render() {
        return <div id="interactive" className="viewport" />
  }
}

export default Scanner;
