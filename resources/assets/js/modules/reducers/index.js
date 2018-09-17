import {combineReducers} from 'redux'
import {routerReducer} from 'react-router-redux'

import products from './products'
import productsPage from './productsPage'

export default combineReducers({
    routing: routerReducer,
    products,
    productsPage
})