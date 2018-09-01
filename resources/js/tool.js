Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'nova-blog',
            path: '/nova-blog',
            component: require('./components/Tool'),
        },
    ])
})
