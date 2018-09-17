import React from 'react';
import { Link } from 'react-router';

import Menu from '../layouts/Menu.jsx';

import 'font-awesome/less/font-awesome.less';
import 'material-design-iconic-font/less/material-design-iconic-font.less';
import './../../megaMenu.less';
import './../../style.less';
import './../../responsive.less';

const divStyle = {
    backgroundColor: '#333'
};
const divStyleF = {
    backgroundColor: '#f5f5f7',
    backgroundRepeat: 'no_repeat',
    backgroundSize: 'cover',
    backgroundPosition: 'center'
};

const Layout = React.createClass({
    render: function(){
        return (
/*            <div className="app">
                <Link to='/'>Home</Link>
                <Link to='/about'>About</Link>
                {this.props.children}
            </div>*/
            <div className="k2t-container">
                <header className="k2t-header" >
                    <div className="k2t-header-top" style={divStyle}>
                        <div className="k2t-wrap" >
                            <div className="k2t-row">
                                <div className="col-6 align-left">
                                    <ul className="social">
                                        <li>
                                            <a href="#" target="_blank"><i className="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank"><i className="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank"><i className="fa fa-pinterest"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank"><i className="fa fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank"><i className="fa  fa-paper-plane-o"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div className="col-6 align-right">
                                    <div className="h-element element-editor" >
                                        <i className="fa fa-phone"></i>
                                        <p className="text"> +998 71 200 00 09  </p>
                                    </div>
                                    <div className="h-element element-editor" >
                                        <i className="fa fa-envelope"></i>
                                        <p className="text">IdealSupport@yourdomain.com  </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <Menu />
                </header>

                <div className="k2t-body" id="k2t-body">
                    {this.props.children}
                </div>
                <footer className="k2t-footer dark-style" style={divStyle}>
					<div className="k2t-bottom" >
                        <div className="k2t-wrap">
                            <div className="k2t-row">
                                <div className="col-3">
                                    <aside id="text-2" className="widget widget_text">
                                        <h4 className="widget-title">
                                            <span>contact</span>
                                        </h4>
                                        <div className="textwidget">You are consenting to receive a reply with all the details. To ask a question or offer feedback relating to our event and programme, please
                                            <Link to='/'> click here</Link>
                                            .
                                        </div>
                                    </aside>
                                </div>
                                <div className="col-3">
                                    <aside id="text-3" className="widget widget_text">
                                        <h4 className="widget-title">
                                            <span>information</span>
                                        </h4>
                                        <div className="textwidget">
                                            <ul>
                                                <li>New Collection</li>
                                                <li>Special product</li>
                                                <li>Instagram profile</li>
                                                <li>High-quality product</li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                                <div className="col-3">
                                    <aside id="text-5" className="widget widget_text">
                                        <h4 className="widget-title">
                                            <span>address</span>
                                        </h4>
                                        <div className="textwidget">
                                            <div className="p-with-icon1" >
                                                <span aria-hidden="true" className="zmdi zmdi-pin"></span>
                                                <p className="text">79 Orchard St, London, Ny 10002, United States</p>
                                            </div>
                                            <div className="p-with-icon2">
                                                <span aria-hidden="true" className="zmdi zmdi-email"></span>
                                                <p className="text">Ideal@yourdomain.com</p>
                                            </div>
                                            <div className="p-with-icon3">
                                                <span aria-hidden="true" className="zmdi zmdi-phone"></span>
                                                <p className="text">+998 71 200-00-09</p>
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="k2t-info" style={divStyleF}>
                        <div className="k2t-wrap">
                            <div className="k2t-row">
                                <div className="col-12">
                                    <div className="col-4">
                                        <div className="k2t-social-share social">
                                            <ul>
                                                <li>
                                                    <a className="facebook" title="facebook" href="http://facebook.com" target="_blank">
                                                        <i className="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a className="twitter" title="twitter" href="https://twitter.com" target="_blank">
                                                        <i className="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a className="instagram" title="instagram" href="http://instagram.com/" target="_blank">
                                                        <i className="fa fa-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a className="googleplus" title="googleplus" href="https://plus.google.com/" target="_blank">
                                                        <i className="zmdi zmdi-google"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a className="youtube" title="youtube" href="http://youtube.com/" target="_blank">
                                                        <i className="fa fa-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div className="col-4">
                                        <p>&#169; 2018 <Link to='/about'> Ideal</Link>. All Rights Reserved.</p>
                                    </div>
                                    <div className="col-4 col-payment">
                                        <ul className="k2t-payment">
                                            <li className="payment-visa">
                                                <a href="#" rel="alternate">
                                                    <img src="neveda/content/themes/neveda/assets/img/payment/visa.png" alt="visa" />
                                                </a>
                                            </li>
                                            <li className="payment-paypal">
                                                <a href="#" rel="alternate">
                                                    <img src="neveda/content/themes/neveda/assets/img/payment/paypal.png" alt="paypal" />
                                                </a>
                                            </li>
                                            <li className="payment-banktransfer">
                                                <a href="#" rel="alternate">
                                                    <img src="neveda/content/themes/neveda/assets/img/payment/bank.png" alt="banktransfer" />
                                                </a>
                                            </li>
                                            <li className="payment-bitcoin">
                                                <a href="#" rel="alternate">
                                                    <img src="neveda/content/themes/neveda/assets/img/payment/bitcoin.png" alt="bitcoin" />
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        );
    }
});

export default Layout;