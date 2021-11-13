// External Dependencies
import React, { Component } from 'react';

// Internal Dependencies
import './style.css';


class HelloWorld extends Component {

  static slug = 'w4di_hello_world';

  render() {
    const Content = this.props.content;

    return (
      <div class="gridinfo-divi-wrapper">
        <h1>
          <Content/>
        </h1>
        <table class="gridinfo">
          <tr>
            <td class="gridvar">Grid name</td>
            <td class="gridvalue">Example Grid</td>
          </tr>
          <tr>
            <td class="gridvar">Login URI</td>
            <td class="gridvalue">example.org:8002</td>
          </tr>
        </table>
      </div>
    );
  }
}

export default HelloWorld;
