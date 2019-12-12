import React, { Component } from 'react'
import { Link } from 'react-router-dom';

class header extends Component {
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
      menuBtn.classNameList.remove('close');
      menu.classNameList.remove('show');
      menuNav.classNameList.remove('show');
      menuBranding.classNameList.remove('show');
      navItems.forEach(item => item.classNameList.remove('show'));
  
      // Set Menu State
      showMenu = false;
    }
  }
    }
    render() {
        return (

            <header>
    <div className="menu-btn">
      <div className="btn-line"></div>
      <div className="btn-line"></div>
      <div className="btn-line"></div>
    </div>
    <nav className="menu">
      <div className="menu-branding">
        <div className="portrait"></div>
      </div>
      <ul className="menu-nav">
        <li className="nav-item current">
        <Link to="/" className="nav-link">Home</Link>
        </li>
        <li className="nav-item">
        <Link to="/aboutme" className="nav-link">About Me</Link>
        </li>
        <li className="nav-item">
        <Link to="/projects" className="nav-link">My Work</Link>
        </li>
        <li className="nav-item">
        <Link to="/contact" className="nav-link">How To Reach Me</Link> 
        </li>
      </ul>
    </nav>
  </header>
           
        )
    }
}

export default header
