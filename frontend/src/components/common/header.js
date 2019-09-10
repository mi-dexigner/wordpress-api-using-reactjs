import React, { Component } from 'react'
import { Link } from 'react-router-dom';

export class header extends Component {
    componentDidMount(){
  const menuBtn = document.querySelector('.menu-btn');
const menu = document.querySelector('.menu');
const menuNav = document.querySelector('.menu-nav');
const menuBranding = document.querySelector('.menu-branding');
const navItems = document.querySelectorAll('.nav-item');
// Set Initial State Of Menu
let showMenu = false;
menuBtn.addEventListener('click', toggleMenu);
function toggleMenu() {
    if (!showMenu) {
      menuBtn.classList.add('close');
      menu.classList.add('show');
      menuNav.classList.add('show');
      menuBranding.classList.add('show');
      navItems.forEach(item => item.classList.add('show'));
  
      // Set Menu State
      showMenu = true;
    } else {
      menuBtn.classList.remove('close');
      menu.classList.remove('show');
      menuNav.classList.remove('show');
      menuBranding.classList.remove('show');
      navItems.forEach(item => item.classList.remove('show'));
  
      // Set Menu State
      showMenu = false;
    }
  }
    }
    render() {
        return (

            <header>
    <div class="menu-btn">
      <div class="btn-line"></div>
      <div class="btn-line"></div>
      <div class="btn-line"></div>
    </div>
    <nav class="menu">
      <div class="menu-branding">
        <div class="portrait"></div>
      </div>
      <ul class="menu-nav">
        <li class="nav-item current">
        <Link to="/" className="nav-link">Home</Link>
        </li>
        <li class="nav-item">
        <Link to="/aboutme" className="nav-link">About Me</Link>
        </li>
        <li class="nav-item">
        <Link to="/projects" className="nav-link">My Work</Link>
        </li>
        <li class="nav-item">
        <Link to="/contact" className="nav-link">How To Reach Me</Link> 
        </li>
      </ul>
    </nav>
  </header>
           
        )
    }
}

export default header
