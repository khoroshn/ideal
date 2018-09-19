import * as R from 'ramda';

import {
    FETCH_PRODUCTS_SUCCESS
} from './../actionTypes'



const initialState = {}

export default (state = initialState, {type, payload}) => {
    switch (type) {
        case FETCH_PRODUCTS_SUCCESS:
            const newValue = R.indexBy(R.prop('id'), payload)
            return R.merge(state, newValue)
        default:
            return state
    }
}