import React, { Component } from 'react'
import axios from 'axios';
import Main from './components/main';
import './main.css';

class App extends Component {
  constructor(props){
    super(props)
    this.state = {
      siteName:'',
     
    }
  }
  componentDidMount(){
      axios.get('/wp-json/').then(data =>{;
      document.title = data.data.name
    }) 
        
  }

  render(){
    return (
          <Main />
   
    );
  }
}

export default App;
