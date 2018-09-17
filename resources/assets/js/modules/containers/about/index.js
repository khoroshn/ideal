import React, {Component} from 'react'



class About extends React.Component {
    render (){
        return(
            <div>
                <p>Text of About page</p>
                <div>
                    connect
                </div>
            </div>
        )
    }
}


export default connect(mapStateToProps, mapDispatchToProps)(About);
