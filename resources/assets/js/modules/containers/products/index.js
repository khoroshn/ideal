import React, {Component} from 'react'
import {connect} from 'react-redux'

import {fetchProducts} from './../../actions/'


import {getProducts} from './../../selectors.js'

class Products extends React.Component {
    componentDidMount () {
        this.props.fetchProducts()
    }
    renderProduct(product, index){
        console.log(product);
        return (
                <div>
                    {product.name}
                </div>

        )
    }
    render (){
        const {products} = this.props
        return(
            <div>
                <p>Text of products page</p>
                <div>
                    {products.map((product, index) => this.renderProduct(product, index))}
                </div>
            </div>
        )
    }
}

const mapStateToProps = state => ({
    products: getProducts(state)
})

const mapDispatchToProps = {
    fetchProducts
}

export default connect(mapStateToProps, mapDispatchToProps)(Products);
