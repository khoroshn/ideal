import React from 'react';

import Hux from '../../hoc/Hux';

const nav = () => (
  <Hux>
    <nav className="navbar navbar-inverse" role="navigation-demo">
      <div className="container">
        
        <div className="navbar-header">
          <button type="button" className="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
            <span className="sr-only">Toggle navigation</span>
            <span className="icon-bar"></span>
            <span className="icon-bar"></span>
            <span className="icon-bar"></span>
          </button>
          <a className="navbar-brand" href="#pablo">Navbar with notification</a>
        </div>

    
        <div className="collapse navbar-collapse" id="navigation-example-2">
          <ul className="nav navbar-nav navbar-right">
                <li>
                    <a href="#pablo">
                        Discover
                    </a>
                </li>
                <li>
                    <a href="#pablo">
                        Wishlist
                    </a>
                </li>
                <li>
                    <a href="#pablo" className="btn btn-rose btn-raised btn-fab btn-fab-mini" data-toggle="dropdown">
                        <i className="material-icons">email</i>
                    </a>
                </li>
                <li className="dropdown">
                    <a href="#pablo" className="profile-photo dropdown-toggle" data-toggle="dropdown">
                        <div className="profile-photo-small">
                            <img src="assets/img/faces/avatar.jpg" alt="Circle Image" className="img-circle img-responsive" />
                        </div>
                    </a>
                    <ul className="dropdown-menu">
                        <li className="dropdown-header">
                            Dropdown header
                        </li>
                        <li>
                            <a href="#pablo">Me</a>
                        </li>
                        <li>
                            <a href="#pablo">Settings and other stuff</a>
                        </li>
                        <li className="divider"></li>
                        <li><a href="#pablo">Sign out</a></li>
                    </ul>
                </li>
           </ul>
        </div>
      </div>
    </nav>
  </Hux>
);

export default nav;


