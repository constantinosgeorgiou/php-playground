/**
 * External dependencies
 */
import { addFilter } from '@wordpress/hooks';
const WooCommerceRestApi = require( '@woocommerce/woocommerce-rest-api' )
	.default;
/**
 * Internal dependencies
 */
import './index.scss';

const WooCommerce = new WooCommerceRestApi( {
	url: 'localhost',
	consumerKey: 'consumer_key',
	consumerSecret: 'consumer_secret',
	version: 'wc/v3',
} );

WooCommerce.get( '' )
	.then( ( response ) => {
		console.log( response.data );
	} )
	.catch( ( error ) => {
		console.log( error.response.data );
	} );

const MiniWCClientPage = () => (
	<div>
		<h1>Mini WooCommerce Client Page</h1>
		<p>Testing</p>
	</div>
);

addFilter( 'woocommerce_admin_pages_list', 'mini-wc-client', ( pages ) => {
	pages.push( {
		container: MiniWCClientPage,
		path: '/mini-wc-client',
		breadcrumbs: [ 'Mini WooCommerce Client' ],
		navArgs: {
			id: 'mini-wc-client',
		},
	} );

	return pages;
} );
