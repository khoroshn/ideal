import React, { Component, Fragment } from 'react'
import PropTypes from 'prop-types';
import CssBaseline from '@material-ui/core/CssBaseline';
import { MuiThemeProvider, createMuiTheme, withStyles  } from '@material-ui/core/styles';

import { Header, Footer, MenuTop } from './Layouts'
import Exercises from './Exercises'

const theme = createMuiTheme({

    palette: {
        primary: {
            main: '#212121',
        },
        secondary: {
            main: '#dd2c00',
        },
    },
});


export default class extends Component {
    render() {
        return <Fragment>
            <MuiThemeProvider theme={theme} >
                <CssBaseline />

                    <Header />

                    <MenuTop />

                    <Exercises />

                    <Footer />

            </MuiThemeProvider>
        </Fragment>
    }
}