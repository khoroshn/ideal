import React from 'react';

import Title from '../layouts/Title.jsx';

const alignCenter = {
    textAlign: 'center'
}

const AboutPage = React.createClass({

    render: function(){
        return (
                <div>
                   <Title />
                    <div className="k2t-content no-sidebar" >
                        <div className="container k2t-wrap">
                            <div className="k2t-main page">
                                <article id="post-1710" className="post-1710 page type-page status-publish hentry">
                                    <div class="page-entry">
                                        <div className="page-title">
                                        </div>
                                        <div className="content-page">
                                            <div className="vc_row wpb_row vc_row-fluid row-1">
                                                <div className="wpb_column vc_column_container vc_col-sm-12">
                                                    <div className="vc_column-inner ">
                                                        <div className="wpb_wrapper">
                                                            <div  id="cuqwLbDN5p" className="k2t-heading align-center no-border no-subtitle h2 two_dots heading">
                                                                <div className="k2t-heading-inner">
                                                                    <div className="text" style={alignCenter}>
                                                                        <h2 className="h"><span>IDEAL FASHION</span></h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div className="wpb_text_column wpb_content_element  text-block-1" >
                                                                <div className="wpb_wrapper">
                                                                    <p style={alignCenter}>
                                                                        Ideal Shop brings you an assortment of unique clothing, accessories, shoes.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
        );
    }
});

export default AboutPage;