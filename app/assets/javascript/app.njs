import React
import TypeScript

Application scope using React<TypeScript> {
	import App from '~/app/views/App'

	App class extends React.Component {
    state = {}

		render func props: (
      <Fragment>
        <App { ...props } />

        <button onClick={this.handleButtonClick}>
          Click Me
        </button>
      </Fragment>
    )

    componentDidMount func {
      this.state = { ...this.state, :userList => [] }
    }

    componentDidUnmount func {
      this.state = {}
    }

    handleButtonClick func event: MouseEvent {
      call console.log event.target.innerText
    }
	}
}
