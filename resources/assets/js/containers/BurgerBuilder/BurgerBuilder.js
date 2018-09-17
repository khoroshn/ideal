import React, {Component} from 'react';

import Hux from '../../hoc/Hux';

class BurgerBuilder extends Component {
	render () {
		return (
			<Hux>
				<div>Burger</div>
				<div>Build Controls</div>
			</Hux>
		);
	}
};

export default BurgerBuilder;