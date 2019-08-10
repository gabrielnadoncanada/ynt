import React, { Component } from 'react'
import ContactForm from './contactForm/ContactForm'

export default class ContactsPage extends Component {
    render() {
        return (
            <div>
                <ContactForm id='main-contact-form' className="contact-form" name="contact-form" method='post' action="" />
            </div>
        )
    }
}
