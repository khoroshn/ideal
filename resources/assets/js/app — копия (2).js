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

import Layout from './ideal/components/layout'



class App extends Component {

	state = {
		name: 'Golem'
	}

	clickFunction =() => {
		this.setState({ name:'Nik' })
	}

	render () {
		return (

			<div>
				<button onClick={this.clickFunction}>Click</button>
				<Layout name={this.state.name} age="23"/>
			</div>
			
		)
	}

}


ReactDOM.render(<App />, document.getElementById("root"));





