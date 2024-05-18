const express = require('express');
const app = express();

// Middleware
app.use((req, res, next) => {
  console.log(`Request URL: ${req.url}`);
  next();
});

// Route definition
app.get('/azuredegreeapp.git', (req, res) => {
  res.send('Route is working!');
});

app.listen(3000, () => {
  console.log('Server is running on port 3000');
});
