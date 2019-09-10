import React, { Component } from 'react'
import Header from '../common/header';
export class front extends Component {
    render() {
        return (
            <div  id="bg-img">
  <Header/>

  <main id="home">
    <h1 class="lg-heading">
      John
      <span class="text-secondary">Doe</span>
    </h1>
    <h2 class="sm-heading">
      Web Developer, Programmer, Designer & Entrepreneur
    </h2>
    <div class="icons">
      <a href="#!">
        <i class="fab fa-twitter fa-2x"></i>
      </a>
      <a href="#!">
        <i class="fab fa-facebook fa-2x"></i>
      </a>
      <a href="#!">
        <i class="fab fa-linkedin fa-2x"></i>
      </a>
      <a href="#!">
        <i class="fab fa-github fa-2x"></i>
      </a>
    </div>
  </main>
</div>
        )
    }
}

export default front
