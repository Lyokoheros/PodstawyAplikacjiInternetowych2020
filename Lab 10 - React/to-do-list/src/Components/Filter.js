import React from 'react';


class Filter extends React.Component
{
  render(){
    return (
      <div className="filter">
          <input 
            type="checkbox" 
            checked={this.props.state} 
            onChange={() => this.props.change()}
          />  
          <p>Ukryj ukończone</p>

      </div>
    );
  }
}

export default Filter;