import * as R from 'ramda';

const getProductById = (state, id) => R.prop(id, state.products)

export const getProducts = state => {
    const products = R.map(id => getProductById(state, id), state.productsPage.ids)
    return products
}