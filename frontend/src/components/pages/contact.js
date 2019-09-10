import React, { Component } from 'react'
import Header from '../common/header';
import Footer from '../common/footer';

export class contact extends Component {
    render() {
        return (
            <div>
              <Header/>
              <main id="contact">
    <h1 class="lg-heading">
      Contact
      <span class="text-secondary">Me</span>
    </h1>
    <h2 class="sm-heading">
      This is how you can reach me...
    </h2>
    <div class="boxes">
      <div>
        <span class="text-secondary">Email: </span> johndoe@test.com
      </div>
      <div>
        <span class="text-secondary">Phone: </span> (555) 555-5555
      </div>
      <div>
        <span class="text-secondary">Address: </span> 50 Main st Boston MA 02101
      </div>
    </div>
  </main>
  <Footer/>
            </div>
        )
    }
}

export default contact
