import React, { Component } from 'react'
import axios from 'axios'
import Swal from 'sweetalert2'

export default class Table extends Component {
    constructor(props) {
        super(props)
        this.state = {
            items: [],
            post_title: null,
            post_desc: null,
            user_id: null,
            status_id: null
        }
        this.handleUpdate = this.handleUpdate.bind(this);
        this.handleDelete = this.handleDelete.bind(this);
        this.handleUpdateTitle = this.handleUpdateTitle.bind(this);
        this.handleUpdateDesc = this.handleUpdateDesc.bind(this);
        this.handleUpdateId = this.handleUpdateId.bind(this);
        this.handleUpdateStatusId = this.handleUpdateStatusId.bind(this);
    }

    handleUpdateTitle = event => {
        this.setState({
            post_title: event.target.value
        })
    }


    handleUpdateDesc = event => {
        this.setState({
            post_desc: event.target.value
        })
    }

    handleUpdateId = event => {
        this.setState({
            user_id: event.target.value
        })
    }

    handleUpdateStatusId = event => {
        this.setState({
            status_id: event.target.value
        })
    }


    handleDelete(event) {
        event.preventDefault()

        let args = {
            title: 'Êtes-vous sûr?',
            text: "Vous ne pourrez pas revenir en arrière!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui, supprimez!',
            boutonid: event.target.id
        }

        Swal.fire(args)
            .then((result) => {
                if (result.value) {
                    axios.delete('http://localhost/wordpress/wp-json/taskmanager/v0/tasks/' + args.boutonid)
                    Swal.fire(
                        'Supprimé!',
                        'Votre fichier a été supprimé.',
                        'success'
                    )
                }
            })
    }

    handleUpdate(event, prevStates) {
        event.preventDefault()
        let args = {
            post_title: this.state.post_title,
            post_desc: this.state.post_desc,
            user_id: this.state.user_id,
            status_id: this.state.status_id
        }

        axios.put('http://localhost/wordpress/wp-json/taskmanager/v0/tasks/' + event.target.id, args)
            .then(res => res.json())
            .then((result) => {
                this.setState({ items: result })
            }, (error) => {
                this.setState({ error })
            })
    }
    componentDidUpdate(prevStates) {
        if (this.state.items !== prevStates.items) {
            fetch('http://localhost/wordpress/wp-json/taskmanager/v0/tasks')
                .then(res => res.json())
                .then((result) => {
                    this.setState({ items: result })
                }, (error) => {
                    this.setState({ error })
                })
        }
    }
    componentDidMount() {
        fetch('http://localhost/wordpress/wp-json/taskmanager/v0/tasks')
            .then(res => res.json())
            .then((result) => {
                this.setState({ items: result })
            }, (error) => {
                this.setState({ error })
            })
    }

    render() {
        const { items } = this.state
        return (
            <table>
                <tr>
                    <th>title</th>
                    <th>desc</th>
                    <th>user id</th>
                    <th>status id</th>
                    <th>edit</th>
                    <th>delete</th>
                </tr>

                {items
                    .map((item, i) => (
                        <tr>
                            <td>{item.post_title}</td>
                            <td>{item.post_desc}</td>
                            <td>{item.user_id}</td>
                            <td>{item.status_id}</td>
                            <td>
                                <form onSubmit={this.handleUpdate} id={item.ID}>
                                    <label for="post_title">Nouveau title</label>
                                    <input name="post_title" type="text" onChange={this.handleUpdateTitle} />
                                    <label for="post_desc">Nouvelle description</label>
                                    <input name="post_desc" type="text" onChange={this.handleUpdateDesc} />
                                    <label for="user_id">Nouveau utilisateur</label>
                                    <input name="user_id" type="text" onChange={this.handleUpdateId} />
                                    <label for="status">status</label>
                                    <select name="status" form="status" onChange={this.handleUpdateStatusId}>
                                        <option value="stuck">Stuck</option>
                                        <option value="working">Working</option>
                                        <option value="waiting">Waiting</option>
                                        <option value="done">Done</option>
                                    </select>
                                    <input type="submit" value="Modifier la tâche" />
                                </form>
                            </td>

                            <td><button id={item.ID} onClick={this.handleDelete}>Supprimer la tâche</button></td>
                        </tr>
                    ))}
            </table>
        )
    }
}
