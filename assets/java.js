var App = React.createClass({
	getInitialState: function() {
		return({
			modal: false
		})
	},
	checkoutClick: function() {
		this.setState({modal: true});
	},
	okayClick: function() {
		this.setState({modal: false});
	},
	render: function() {
		return (
			<div className="App">
				<Button onClick={this.checkoutClick} />
				<Modal onClick={this.okayClick} status={this.state.modal} />
			</div>
		);
	}
});

var Button = React.createClass({
	render: function() {
		return (
			<div onClick={this.props.onClick} className="Button">
				<i className="fa fa-fw fa-cart-arrow-down"></i>	
			</div>
		);
	}
});

var Modal = React.createClass({
	getDefaultProps: function() {
		return ({
			title: 'Thanks!',
			subtitle: 'Your order is being processed, hang tight and have an ice cream!',
			cta: 'Gee, thanks!'
		});
	},
	render: function() {
		return (
			<div className="Modal" data-status={this.props.status}>
				<h1>{this.props.title}</h1>
				<h2>{this.props.subtitle}</h2>
				<button onClick={this.props.onClick}>{this.props.cta}</button>
			</div>
		);
	}
});

// Render
ReactDOM.render(
	<App />,
	document.getElementById('app')
);