const express = require('express')
const app = express()




app.listen(3000, ()=>{
    console.log('Listening on port 3000')
})

app.get('/home', (req, res)=>{
    res.sendFile(__dirname + '/views/indexx.html')
})

app.get('/update/:id', (req, res) =>{
    res.sendFile(__dirname + '/views/details.html')
})
