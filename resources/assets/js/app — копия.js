import React, {Component} from 'react'
import ReactDOM from 'react-dom'
import { AppContainer } from 'react-hot-loader'
import {BrowserRouter as Router, Link, Route } from 'react-router-dom'
import {createStore, applyMiddleware} from 'redux'
import thunk from 'redux-thunk'
import {composeWithDevTools} from 'redux-devtools-extension'
import {browserHistory} from 'react-router'
import {syncHistoryWithStore} from 'react-router-redux'
import {Provider} from 'react-redux'


import reducers from './modules/reducers'
import Layout from './modules/containers/layout'
import Products from './modules/containers/products'

const store = createStore(reducers, composeWithDevTools(
    applyMiddleware(thunk)
));

const history = syncHistoryWithStore(browserHistory, store);



class App extends Component {
	render () {
		return (
			<AppContainer>
				<Router>
					<Route path="/" component={Layout}>
						<Route path="/products" component={Products}/>
					</Route>
				</Router>
			</AppContainer>
		)
	}

}





ReactDOM.render(<App />, document.getElementById("root"));





