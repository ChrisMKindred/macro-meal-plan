import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class RecipeList extends Component {
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="title">Macro Meal Plan</div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('recipelist')) {
    ReactDOM.render(<RecipeList />, document.getElementById('recipelist'));
}
