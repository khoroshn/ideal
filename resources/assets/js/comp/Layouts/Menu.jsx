import React from 'react';
import { Link } from 'react-router';

const Menu = React.createClass({

    render: function(){
        return (
            <div className="k2t-header-mid">
                <div className="k2t-wrap">
                    <div className="k2t-row">
                        <div className="col-2 align-left">
                            <div  className="h-element ">
                                <Link className="k2t-logo" to='/'>
                                    <img src="/neveda/content/themes/neveda/assets/img/logo-2.png" alt="Ideal" />
                                </Link>
                            </div>
                        </div>
                        <div className="col-7 align-center">
                            <ul id="menu-main-menu" className="h-element k2t-menu ">
                                <li id="menu-item-1726" className="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-has-children menu-item-1726 children ">
                                    <Link to='/' className="btn-ripple">
                                        <span className="k2t-title-menu">Home</span>
                                        <span className="caret"></span>
                                    </Link>
                                </li>
                                <li className="menu-item children ">
                                    <Link to='/shop' className="btn-ripple">
                                        <span className="k2t-title-menu">Shop</span>
                                        <span className="caret"></span>
                                    </Link>

                                </li>
                                <li className="menu-item children k2t-megamenu mega-type-fullwidth mega-5 ">
                                    <a href="#" className="btn-ripple">
                                        <span className="k2t-title-menu"> Blog Blog Blog</span>
                                        <span className="caret"></span>
                                    </a>
                                    <div className="mega-container " >
                                        <ul>
                                            <li className="menu-item children k2t-megamenu-submenu">
                                                <a href="index.html@p=1710.html#" title="Blog Listing">Blog Listing</a>
                                                <ul className="sub-menu">
                                                    <li  className="menu-item menu-item-type-post_type menu-item-object-page menu-item-1926">
                                                        <a href="blog-grid-2-columns-right-sidebar/page/1/index.html" className="btn-ripple">
                                                            <span className="k2t-title-menu">Blog Grid 2 Columns Right Sidebar</span>
                                                        </a>
                                                    </li>
                                                    <li  className="menu-item menu-item-type-post_type menu-item-object-page menu-item-1925">
                                                        <a    href="blog-grid-3-columns-no-sidebar/page/1/index.html" className="btn-ripple">
                                                            <span className="k2t-title-menu">Blog Grid 3 Columns No Sidebar</span>
                                                        </a>
                                                    </li>
                                                    <li  className="menu-item menu-item-type-post_type menu-item-object-page menu-item-2194">
                                                        <a    href="blog-mansory-3-columns-no-sidebar/page/1/index.html" className="btn-ripple">
                                                            <span className="k2t-title-menu">Blog Mansory 3 Columns No Sidebar</span>
                                                        </a>
                                                    </li>
                                                    <li className="menu-item menu-item-type-post_type menu-item-object-page menu-item-2197">
                                                        <a href="blog-large-left-sidebar/page/1/index.html" className="btn-ripple">
                                                            <span className="k2t-title-menu">Blog Large Left Sidebar</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li  className="menu-item menu-item-type-custom children k2t-megamenu-submenu">
                                                <a href="index.html@p=1710.html#" title="Single Blog">Single Blog</a>
                                                <ul className="sub-menu">
                                                    <li className="menu-item">
                                                        <a    href="index.html@p=1996.html" className="btn-ripple">
                                                            <span className="k2t-title-menu">Standard Blog Format</span>
                                                        </a>
                                                    </li>
                                                    <li  className="menu-item">
                                                        <a    href="index.html@p=1766.html" className="btn-ripple">
                                                            <span className="k2t-title-menu">Video Blog Format</span>
                                                        </a>
                                                    </li>
                                                    <li className="menu-item">
                                                        <a href="index.html@p=1.html" className="btn-ripple">
                                                            <span className="k2t-title-menu">Quote Blog Format</span>
                                                        </a>
                                                    </li>
                                                    <li  className="menu-item">
                                                        <a href="index.html@p=1986.html" className="btn-ripple">
                                                            <span className="k2t-title-menu">Link Blog Format</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
});

export default Menu;