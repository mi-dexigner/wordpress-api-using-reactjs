// eslint-disable-next-line
import React, { Component } from 'react'
import Header from '../common/header';
import Footer from '../common/footer';

export class projects extends Component {
    render() {
        return (
            <div>
                <Header/>
                <main id="work">
    <h1 className="lg-heading">
      My
      <span className="text-secondary">Work</span>
    </h1>
    <h2 className="sm-heading">
      Check out some of my projects...
    </h2>
    <div className="projects">
      <div className="item">
        <a href="#!">
          <img src={require("../../img/projects/project1.jpg")} alt="Project 1" />
        </a>
        <a href="#!" className="btn-light">
          <i className="fas fa-eye"></i> Project
        </a>
        <a href="#!" className="btn-dark">
          <i className="fab fa-github"></i> Github
        </a>
      </div>
      <div className="item">
        <a href="#!">
          <img src={require("../../img/projects/project2.jpg")} alt="Project 2"/>
        </a>
        <a href="#!" className="btn-light">
          <i className="fas fa-eye"></i> Project
        </a>
        <a href="#!" className="btn-dark">
          <i className="fab fa-github"></i> Github
        </a>
      </div>
      <div className="item">
        <a href="#!">
          <img src={require("../../img/projects/project3.jpg")} alt="Project 3"/>
        </a>
        <a href="#!" className="btn-light">
          <i className="fas fa-eye"></i> Project
        </a>
        <a href="#!" className="btn-dark">
          <i className="fab fa-github"></i> Github
        </a>
      </div>
      <div className="item">
        <a href="#!">
          <img src={require("../../img/projects/project4.jpg")} alt="Project 4"/>
        </a>
        <a href="#!" className="btn-light">
          <i className="fas fa-eye"></i> Project
        </a>
        <a href="#!" className="btn-dark">
          <i className="fab fa-github"></i> Github
        </a>
      </div>
      <div className="item">
        <a href="#!">
          <img src={require("../../img/projects/project5.jpg")} alt="Project 5"/>
        </a>
        <a href="#!" className="btn-light">
          <i className="fas fa-eye"></i> Project
        </a>
        <a href="#!" className="btn-dark">
          <i className="fab fa-github"></i> Github
        </a>
      </div>
    </div>
  </main> 
  <Footer/>
            </div>
        )
    }
}

export default projects
