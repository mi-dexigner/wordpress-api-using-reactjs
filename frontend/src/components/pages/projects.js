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
    <h1 class="lg-heading">
      My
      <span class="text-secondary">Work</span>
    </h1>
    <h2 class="sm-heading">
      Check out some of my projects...
    </h2>
    <div class="projects">
      <div class="item">
        <a href="javascript:void()">
          <img src="{img/projects/project1.jpg}" alt="Project" />
        </a>
        <a href="javascript:void()" class="btn-light">
          <i class="fas fa-eye"></i> Project
        </a>
        <a href="javascript:void()" class="btn-dark">
          <i class="fab fa-github"></i> Github
        </a>
      </div>
      <div class="item">
        <a href="javascript:void()">
          <img src="{img/projects/project2.jpg}" alt="Project"/>
        </a>
        <a href="javascript:void()" class="btn-light">
          <i class="fas fa-eye"></i> Project
        </a>
        <a href="javascript:void()" class="btn-dark">
          <i class="fab fa-github"></i> Github
        </a>
      </div>
      <div class="item">
        <a href="javascript:void()">
          <img src="{img/projects/project3.jpg}" alt="Project"/>
        </a>
        <a href="javascript:void()" class="btn-light">
          <i class="fas fa-eye"></i> Project
        </a>
        <a href="javascript:void()" class="btn-dark">
          <i class="fab fa-github"></i> Github
        </a>
      </div>
      <div class="item">
        <a href="javascript:void()">
          <img src="{img/projects/project4.jpg}" alt="Project"/>
        </a>
        <a href="javascript:void()" class="btn-light">
          <i class="fas fa-eye"></i> Project
        </a>
        <a href="javascript:void()" class="btn-dark">
          <i class="fab fa-github"></i> Github
        </a>
      </div>
      <div class="item">
        <a href="javascript:void()">
          <img src="{img/projects/project5.jpg}" alt="Project"/>
        </a>
        <a href="javascript:void()" class="btn-light">
          <i class="fas fa-eye"></i> Project
        </a>
        <a href="javascript:void()" class="btn-dark">
          <i class="fab fa-github"></i> Github
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
