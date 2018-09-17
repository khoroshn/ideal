import React from 'react'
import PropTypes from 'prop-types';
import { withStyles } from '@material-ui/core/styles';

import Grid from '@material-ui/core/Grid';
import Paper from '@material-ui/core/Paper';
import Typography from '@material-ui/core/Typography';


const styles = theme => ({
    root: {
        textAlign: 'center',
        paddingTop: theme.spacing.unit * 20,
    },
});


export default props =>

    <footer className="footer footer-black footer-big">
        <div className="container">

            <div className="content">
                <div className="row">
                    <div className="col-md-4">
                        <h5>About Us</h5>
                        <p>Creative Tim is a startup that creates design tools that make the web development process faster and easier. </p> <p>We love the web and care deeply for how users interact with a digital product. We power businesses and individuals to create better looking web projects around the world. </p>
                    </div>

                    <div className="col-md-4">
                        <h5>Social Feed</h5>
                        <div className="social-feed">
                            <div className="feed-line">
                                <i className="fa fa-twitter"></i>
                                <p>How to handle ethical disagreements with your clients.</p>
                            </div>
                            <div className="feed-line">
                                <i className="fa fa-twitter"></i>
                                <p>The tangible benefits of designing at 1x pixel density.</p>
                            </div>
                            <div className="feed-line">
                                <i className="fa fa-facebook-square"></i>
                                <p>A collection of 25 stunning sites that you can use for inspiration.</p>
                            </div>
                        </div>
                    </div>

                    <div className="col-md-4">
                        <h5>Instagram Feed</h5>
                        <div className="gallery-feed">
                            <img src="../assets/img/faces/card-profile6-square.jpg" class="img img-raised img-rounded" alt="" />
                            <img src="../assets/img/faces/christian.jpg" class="img img-raised img-rounded" alt="" />
                            <img src="../assets/img/faces/card-profile4-square.jpg" class="img img-raised img-rounded" alt="" />
                            <img src="../assets/img/faces/card-profile1-square.jpg" class="img img-raised img-rounded" alt="" />

                            <img src="../assets/img/faces/marc.jpg" class="img img-raised img-rounded" alt="" />
                            <img src="../assets/img/faces/kendall.jpg" class="img img-raised img-rounded" alt="" />
                            <img src="../assets/img/faces/card-profile5-square.jpg" class="img img-raised img-rounded" alt="" />
                            <img src="../assets/img/faces/card-profile2-square.jpg" class="img img-raised img-rounded" alt="" />
                        </div>

                    </div>
                </div>
            </div>


            <hr />

            <ul className="pull-left">
                <li>
                    <a href="#pablo">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="#pablo">
                        Presentation
                    </a>
                </li>
                <li>
                    <a href="#pablo">
                        Discover
                    </a>
                </li>
                <li>
                    <a href="#pablo">
                        Payment
                    </a>
                </li>
                <li>
                    <a href="#pablo">
                        Contact Us
                    </a>
                </li>
            </ul>

            <div className="copyright pull-right">
                Copyright &copy; <script>document.write(new Date().getFullYear())</script> Creative Tim All Rights Reserved.
            </div>
        </div>
    </footer>
