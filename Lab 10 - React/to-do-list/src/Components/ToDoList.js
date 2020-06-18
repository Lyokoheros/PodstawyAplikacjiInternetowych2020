import React from 'react';
//import Data from './Data'
import Task from './Task'
import NewTask from './NewTask'
import Filter from './Filter'

class ToDoList extends React.Component 
{
  constructor() {
    super()
    this.state = {
        tasks: [],//Data,
        filter: false
    }
    this.handleChange = this.handleChange.bind(this)
    this.handleFilter = this.handleFilter.bind(this)
    this.addTask = this.addTask.bind(this)    
}

addTask(taskText, lastId) {
  const newTask = {
    id: this.state.tasks.length,
    completed: false,
    text: taskText
  }
  this.setState(prevState => ({
      tasks: [...prevState.tasks, newTask]
    })
  )
}

handleFilter()
{
  this.setState(prevState => {
      return {
        tasks: prevState.tasks,
        filter: !prevState.filter
      }
    }
  )  
}

handleChange(id) {
    this.setState(prevState => {
        const updatedTasks = prevState.tasks.map(task => {
            if (task.id === id)
            {
              return{
                ...task, //by reszta została niezmieniona
                completed: !task.completed
              }
            }
            return task
        })
        return {
          tasks: updatedTasks
        }
    })
}

  render()
  {
    const list = this.state.filter ? this.state.tasks.filter(task => !task.completed) : this.state.tasks
    const tasks = list.map(task => <Task 
      key = {task.id} 
      item = {task} 
      handleChange={this.handleChange}
    />)
    console.log(list.length>0)
    return (
      <div className="ToDoList">
          <Filter change={this.handleFilter} state={this.state.filter} />
          {(list.length>0) ? tasks : "Nic do roboty"}
          <NewTask addTask={this.addTask}/>
      </div>
    );
  }
}


export default ToDoList;