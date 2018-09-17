import React from 'react';

import Hux from '../../hoc/Hux';


const layout = ( props ) => (
	<Hux>
		<div className="navbar navbar-inverse round-0">
			<div className="container">
		        <div className="navbar-header">
					<button type="button" className="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span className="sr-only">Toggle navigation</span>
						<span className="icon-bar"></span>
						<span className="icon-bar"></span>
						<span className="icon-bar"></span>
					</button>
				    <div className="navbar-brand">
    					Ideal
					</div>
				</div>
                <div className="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul className="nav navbar-nav">
                    <li className="active">
						<a href="#pablo">Link</a>
					</li>
                    <li>
						<a href="#pablo">Link</a>
					</li>
                  </ul>
                  <form className="navbar-form navbar-right" role="search">
                    <div className="form-group form-white">
                      <input type="text" className="form-control" placeholder="Search"/>
                    </div>
                    <button type="submit" className="btn btn-white btn-raised btn-fab btn-fab-mini"><i class="material-icons">search</i></button>
                  </form>
                </div>
			</div>
		</div>
		<div className="main">
			<div className="section">
	    		<div className="container">

	            	{props.children}
		     	 
		  		</div>
	  		</div>
		</div>
    	<footer className="footer-black mb-0">
    		<div className="container">
    			<div className="footer-brand">
    				Material Kit PRO
				</div>
			</div>
		</footer>
	</Hux>
);

export default layout;