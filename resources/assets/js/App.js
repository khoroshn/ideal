require('./bootstrap');
import React, {Component} from 'react';

//import './App.less';

import Layout from './components/Layout/Layout';
import BurgerBuilder from './containers/BurgerBuilder/BurgerBuilder';

class App extends Component {
	render () {
		return (
			<Layout>
				<BurgerBuilder />
			</Layout>
		)
	}
}

export default App;