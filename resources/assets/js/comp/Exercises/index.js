import React from 'react'
import Grid from '@material-ui/core/Grid';




export default props =>
    <Grid container >
        <Grid item sm={6} xs={12}>
            Left
        </Grid>
        <Grid item sm={6} xs={12}>
            Right
        </Grid>
    </Grid>