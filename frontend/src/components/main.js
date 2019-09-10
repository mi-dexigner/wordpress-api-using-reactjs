import React, { Component } from 'react';
import { Switch, Route } from 'react-router-dom';
import front from './pages/front';
import AboutMe from './pages/aboutme';
import Projects from './pages/projects';
import Contact from './pages/contact';


class Main extends Component {
    render() {
     return(
<div>
<Switch>
    <Route exact path="/" component={front} />
    <Route path="/aboutme" component={AboutMe} />
    <Route path="/projects" component={Projects} />
    <Route path="/contact" component={Contact} />
  </Switch>
</div>
     )   
    }
}
export default Main;