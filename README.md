# the-atlas-marketedge
The microsite for marketedge.the-atlas.com

### Auto-Deploy

There's a folder `.github/workflows/main.yml` with configuration for setting up automatic deployment of the dev branch to the development environment in wp-engine.

This setup is based on [this guide](https://github.com/marketplace/actions/deploy-wordpress-to-wp-engine).

**Note**: It is NOT using WP-engine's GitPush feature.

Potential for auto deployment for the other branches to other environments is left in the config file but commented out.
