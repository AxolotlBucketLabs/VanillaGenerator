# VanillaGenerator

[![Discord](https://img.shields.io/discord/1568295845374206052?label=Discord&logo=discord&logoColor=white&color=5865F2)](https://discord.gg/Pk4FrNvHnM)
[![Build](https://github.com/AxolotlBucketLabs/VanillaGenerator/actions/workflows/build.yml/badge.svg?branch=main)](https://github.com/AxolotlBucketLabs/VanillaGenerator/actions/workflows/build.yml)
[![License](https://img.shields.io/github/license/AxolotlBucketLabs/VanillaGenerator?label=License)](LICENSE)

VanillaGenerator adds the `vanilla_overworld` and `vanilla_nether` world generators to PocketMine-MP. The generator is ported from [Glowstone](https://github.com/GlowstoneMC/Glowstone), and its license notices are preserved in [LICENSE](LICENSE).

## Requirements

- PocketMine-MP with API `5.8.0` or later.
- PHP `8.4` for the project build and static analysis workflow.

## Install

Download the PHAR from a successful run of the **Build and analyse plugin** workflow. Copy the PHAR into the server's `plugins/` directory, then restart PocketMine-MP.

## Choose a world generator

Set the generator under the world's folder name in `pocketmine.yml`:

```yaml
worlds:
  world:
    generator: vanilla_overworld
  nether:
    generator: vanilla_nether
```

Choose the generator before creating the world. Existing chunks keep their current terrain. The selected generator creates terrain in new chunks.

## Build and analysis

The GitHub Actions workflow uses [AxolotlBucketLabs DevTools](https://github.com/AxolotlBucketLabs/DevTools) to build and inspect the PHAR. It runs PHPStan at level `max` against Axolotl-PM PocketMine-MP source and uploads the PHAR with build metadata as a workflow artifact. The workflow uses PHP `8.4`.

To build locally, run the DevTools CLI from the project root:

```sh
php -d phar.readonly=0 /path/to/DevTools/bin/devtools.php build --project=. --out=build
```

## License

VanillaGenerator is distributed under the MIT License. See [LICENSE](LICENSE) for the notices and terms.
