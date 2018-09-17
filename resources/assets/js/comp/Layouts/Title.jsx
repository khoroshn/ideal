import React from 'react';

const divStyle = {
    backgroundImage: 'url(/neveda/content/uploads/2016/08/titlebar-img.png)',
    backgroundPosition: 'center center',
    backgroundRepeat: 'no-repeat',
    backgroundSize: 'cover'
}


const Title = React.createClass({

    render: function(){
        return (
            <div className="k2t-title-bar ">
                <div>
                    <div className="container k2t-wrap">
                        <h1 className="main-title" >
                            About Us
                        </h1>
                        <div className="main-excerpt">
                        </div>
                    </div>
                </div>

                <div>
                    <div className="container k2t-wrap breadcrumb hidden">
                        <ul className="k2t-breadcrumbs" >
                            <li >
                                <a  href="#">
                                    Home
                                </a>
                            </li>
                            <li className="current">
                                About Us
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        );
    }
});

export default Title;