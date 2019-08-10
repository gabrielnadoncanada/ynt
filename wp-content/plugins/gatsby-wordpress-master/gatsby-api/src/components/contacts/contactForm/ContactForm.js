import React, { Component } from 'react'
import Input from './Input'
import TextArea from './TextArea'
import Button from './Button'
import * as emailjs from 'emailjs-com'
import 'jquery'
import { Link } from 'react-router'

export default class ContactForm extends Component {
    constructor(props) {
        super(props)
        this.state = {
            name: '',
            email: '',
            subject: '',
            message: '',
            errors: {
                name: '',
                email: '',
                subject: '',
                message: '',
            }
        }
    }

    handleInputChange(event) {
        event.preventDefault()
        const target = event.target
        const name = target.name
        const value = target.value

        this.setState({ [name]: value })
    }

    validateMail() {
        let errors = {}
        let formIsValid = true

        if (!this.state.name || this.state.name.length < 3) {
            errors.name = 'Minimum 3 symbols'
            formIsValid = false
        }

        if (!this.state.subject || this.state.subject.length < 3) {
            errors.subject = 'Minimum 3 symbols'
            formIsValid = false
        }

        if (!this.state.message || this.state.message.length < 10) {
            errors.message = 'Minimum 3 symbols'
            formIsValid = false
        }

        if (!this.state.email || this.state.email.length < 3) {
            errors.email = 'Minimum 3 symbols'
            formIsValid = false
        }

        let pattern = /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/

        if (!pattern.test(this.state.email)) {
            errors.email = 'this is not a valid email'
            formIsValid = false
        }

        this.setState({
            errors: errors
        })

        return formIsValid
    }
    sentMessage(event) {
        event.preventDefault()

        if (!this.validateMail()) {
            return
        }
        var templateParams = {
            from_name: this.state.name + '(' + this.state.email + ')',
            to_name: 'gabrielnadoncanada@gmail.com',
            subject: this.state.subject,
            message_html: this.state.message
        }

        emailjs.send('gmail', 'template_g4LmmuYN', templateParams, 'user_mrDwFPM5rZRXq7a4Io29b')
            .then(function (response) {
                
                console.log('SUCCESS', response.status, response.text)
            }, function (err) {
               
                console.log(err)
            })
        this.setState({
            name: '',
            email: '',
            subject: '',
            message: '',

        })

    }
    render() {
        return (

            <form
                id={this.props.id}
                className={this.props.className}
                name={this.props.name}
                method={this.props.method}
                action={this.props.action}
            >
                <div className="">
                    <Input
                        type="text"
                        name="name"
                        className="form-control"
                        required="required"
                        onChange={this.handleInputChange.bind(this)}
                        value={this.state.name}
                        error={this.state.errors.name}
                    />
                </div>
                <div className="">
                    <Input
                        type="email"
                        name="email"
                        className="form-control"
                        required="required"
                        onChange={this.handleInputChange.bind(this)}
                        value={this.state.email}
                        error={this.state.errors.email}
                    />
                </div>
                <div className="">
                    <Input
                        type="text"
                        name="subject"
                        className="form-control"
                        required="required"
                        onChange={this.handleInputChange.bind(this)}
                        value={this.state.subject}
                        error={this.state.errors.subject}
                    />
                </div>
                <div className="">
                    <TextArea
                        name="message"
                        id="message"
                        className="form-control"
                        required="required"
                        onChange={this.handleInputChange.bind(this)}
                        value={this.state.message}
                        error={this.state.errors.message}
                    />
                </div>
                <Link
                    onClick={this.sentMessage.bind(this)}
                    type='button'
                    name='submit'
                    className='btn btn-primary btn-lg'
                    required='required'>Envoyer</Link>
              

            </form>

        )
    }
}
