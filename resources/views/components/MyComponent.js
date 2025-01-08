// component/MyComponent.js

import React from 'react';
import PropTypes from 'prop-types';
import './MyComponent.css';

const MyComponent = ({ title, description, onClick }) => {
  return (
    <div className="my-component">
      <h1>{title}</h1>
      <p>{description}</p>
      <button onClick={onClick}>Click me</button>
    </div>
  );
};

MyComponent.propTypes = {
  title: PropTypes.string.isRequired,
  description: PropTypes.string.isRequired,
  onClick: PropTypes.func.isRequired,
};

export default MyComponent;
