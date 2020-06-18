import React from 'react';


class NewTask extends React.Component
{
  constructor()
  {
    super()
    this.state = {
      newTask: ""
    }
    this.handleChange = this.handleChange.bind(this)
    this.handleForm = this.handleForm.bind(this)
  }
  handleChange(event) 
  {
      const {name, value} = event.target
      this.setState({
          [name]: value
      })
  }

  handleForm(e)
  {
    e.preventDefault();
    this.props.addTask(this.state.newTask, this.props.lastId, this.props.data)
    this.setState({newTask: ""})
  }



  render() {
    return (
      <form className="NewTask" onSubmit={this.handleForm} method="POST"> 
        <input 
            type="text" 
            value={this.state.newTask} 
            name="newTask" 
            placeholder="Nowe zadanie" 
            onChange={this.handleChange} 
        />
        <button>Dodaj zadanie</button>
      </form>
      
    );
  }
}
export default NewTask;