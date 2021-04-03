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
                    width: 700,
                    height: 600,
                    facingMode: 'environment',
                },
                area: { //offset
                    top: "0%",
                    right: "0%",
                    left: "0%",
                    bottom: "40%"
                },
            },
            locator: {
            patchSize: 'medium',
            halfSample: false,
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
