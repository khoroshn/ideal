import React from 'react'
import {Link} from 'react-router-dom'

class Layout extends React.Component {

    render() {
    	console.log(this);
        return (
        	<div>
	        	<div>
	        		<p>Text</p>
	        		<Link to="/products">
	        			Products
	        		</Link>	        		
	        		<Link to="/about">
	        			About
	        		</Link>
	        	</div>
	            <div>
	                {this.props.children}
	            </div>
            </div>
        );
    }
}

export default  Layout;