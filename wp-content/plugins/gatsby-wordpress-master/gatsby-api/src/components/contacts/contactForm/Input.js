import React, { Component } from 'react'

export default class Input extends Component {
    render() {
        return (
            <div>
                <label htmlFor={this.props.name}>{this.props.name}*</label>
                <input
                    type={this.props.type}
                    name={this.props.name}
                    className={this.props.className}
                    required={this.props.required}
                    onChange={this.props.onChange}
                    value={this.props.value}
                />
                
                <span className='error'>{this.props.error}</span>
            </div>
        )
    }
}
