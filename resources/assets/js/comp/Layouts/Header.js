import React from 'react'

import { MuiThemeProvider, createMuiTheme  } from '@material-ui/core/styles'
import { AppBar, Toolbar, Typography } from '@material-ui/core/'

const topBar = createMuiTheme({
    overrides: {
        // Name of the component ?? / style shee
        MuiAppBar: {
            // Name of the rule
            root: {
                // Some CSS
                background: 'linear-gradient(45deg, #FE6B8B 30%, #FF8E53 90%)',
                border: 0,
                color: 'white',
                height: 32,
                borderBottom: '1px solid white',
                boxShadow: '0 3px 5px 2px rgba(255, 105, 135, .30)',
            },
        },
    },
});



const menuBar = createMuiTheme({

    overrides: {
        MuiAppBar: {
            root: {
                border: 0,
                height: 32,
            },
        },
    },
    palette: {
        primary: {
            main: '#212121',
        },
        secondary: {
            main: '#dd2c00',
        },
    },
});

const style = createMuiTheme({
    overrides: {
        MuiToolbar: {
            root: {
                border: 0,
                minHeight: 32,
            },
        },
    },

});

export default props =>


    <div>
        <MuiThemeProvider theme={topBar}>
            <AppBar
                position="sticky" color="primary" >
                <Typography variant="subheading" color="inherit" align="center">
                    Ideal
                </Typography>
            </AppBar>
        </MuiThemeProvider>
        <MuiThemeProvider theme={menuBar}>
            <AppBar
                position="sticky" color="primary" >
                <Toolbar>
                    <Typography variant="subheading" color="inherit" align="center">
                        Ideal
                    </Typography>
                </Toolbar>
            </AppBar>
        </MuiThemeProvider>
    </div>
