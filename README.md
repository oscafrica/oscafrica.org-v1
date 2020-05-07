# Open Source Community Africa - O.S.C.A 

[![Netlify Status](https://api.netlify.com/api/v1/badges/89bd53bc-e13a-42cb-8d36-e4b5a47b0f18/deploy-status)](https://app.netlify.com/sites/oscafrica/deploys)

Open Source Community Africa is a community of open source advocates and contributors across Africa, with the sole aim of growing and building the spirit of open source development and contribution through an increase in the rate of credible contributions towards maintaining open source technologies by African software developers, designers and all career fields in technology both on a local and global scale.

## Why O.S.C.A ?
As a community, we intend to promote the culture of open source contribution amongst African developers and also strongly advocate for the development of free and open source software by giving people the opportunity and technical empowerment to make credible contributions towards building and maintaining open source projects/softwares.

Get started and know more about us here [www.oscafrica.org](https://oscafrica.org)
![fb_img_1537794640977](https://user-images.githubusercontent.com/32304161/45957843-e8582a00-c00d-11e8-9b47-c4055ed661c8.jpg)


## Code of Conduct:
To ensure a sane and healthy environment for all maintainers, contributors, reviewers and community members in general, we adhere strictly to our [code of conduct](src/CODE_OF_CONDUCT.md) and also urge all members to.

## How to Contribute:
We appreciate your efforts to help make a contribution to our project, This project is currently built with HTML5, CSS3, SASS, JQUERY,  and JAVASCRIPT. To get started here's a quick guide:

1. You have to be a member of the O.S.C.A community, Join [here](https://oscafrica.zulipchat.com/register/).
2.  We use the pull-request model, see [GitHub's help on pull-request](https://help.github.com/articles/using-pull-requests).

# Contributor's Guide

HOW TO CONTRIBUTE TO OPEN SOURCE accepts PR's (pull requests) from **newbies**
only, this is to help **newbies** get familiar with contribution processes.

Issues can be submitted by anyone, seasoned developers or newbies.

### Getting Started

1.  If you are new to Git and Github, it is advisable you go through
    [GitHub For Beginners](http://readwrite.com/2013/09/30/understanding-github-a-journey-for-beginners-part-1/)
    before moving to the next step.

2.  Fork the project on Github,
    [Help Guide to Fork a repository](https://help.github.com/articles/fork-a-repo/).

    ![Illustration for how to fork a repository](https://hisham.hm/img/posts/github-fork.png)

3.  Clone the project.
    ```bash
      git clone https://github.com/<your username>/oscommunityafrica.github.io.git && cd oscommunityafrica.github.io
     ```

4.  Create a branch specific to the issue you are working on.

    ```shell
    git checkout -b update-readme-file
    ```

    For clarity to yourself and others on the issue you're working on, name
    your branch something like `update-xxx` or `fix-xxx` where `xxx` is a short
    description of the changes you're making. For example `update-readme` or
    `fix-typo-on-contribution-md`.

5.  Open up the project in your favourite text editor, select the file you want
    to contribute to and make your changes.

    If you are making changes to the README.md file, you would need to have
    Markdown knowledge. Visit
    [here to read about GitHub Markdown](https://guides.github.com/features/mastering-markdown/)
    and
    [here to practice](http://www.markdowntutorial.com/).

    *   If you are adding a new project/organisation to the README, make sure
        it's listed in alphabetical order.
    *   If you are adding a new organisation, make sure you add an organisation
        label to the organisation name. This would help distinguish projects
        from organisation projects.

6.  After making your changes in the new git branch then add your modified
    files to git,
    [How to add, commit, push and go](http://readwrite.com/2013/10/02/github-for-beginners-part-2/).

    ```shell
    git add path/to/filename.ext
    ```

    You can also add all unstaged files using:

    ```shell
    git add .
    ```

    Note, using a `git add .` will automatically add all files. You can do a
    `git status` to see your changes, but do it before `git add`.

6.  Commit your changes using a descriptive commit message.

    ```shell
    git commit -m "Brief Description of Commit"
    ```

7.  Push your commits to your Github Fork:

    ```shell
    git push -u origin branch-name
    ```

8.  Submit a pull request.

    Within GitHub, visit this main repository and you should see a banner
    suggesting to make a pull request. While you're writing up the pull
    request, you can add `Closes #XXX` in the message body where `#XXX` is the
    issue you're fixing. So an example would be `Closes #42` would close issue
    `#42`.

### Submitting a Pull Request

[What is a pull request?](https://yangsu.github.io/pull-request-tutorial/)

If you decide to fix an issue, it's advisable to check the comment thread in
case there's somebody already working on a fix. If no one is working on it at
the moment, kindly leave a comment stating that you intend to work on it so
other people don't accidentally duplicate your effort.

In a situation whereby somebody decides to fix an issue but doesn't follow up
for a particular period of time, say 1 - 2 weeks, it's acceptable to still pick
up the issue but make sure to leave a comment.

### Submitting an Issue

[What is an Issue?](https://guides.github.com/features/issues/)


The Issue system on OSCA has two sections;

<img src="https://raw.githubusercontent.com/BolajiAyodeji/oscommunityafrica.github.io/master/images/download.png" alt="Desktop View">

- Bug Report <br>
If you find any bug in the software, do raise a `Bug Report` issue stating the found bug. If you so wish to fix the bug, then work on it and send a pull request referencing the issue number, If you don't want to fix, just drop the issue and wait for help, the project maintainers would respond to the Issue.
- Feature Request <br>
If you want to propose or recommend a new feature, kindly use the `Feature Request` section to discuss your proposal.
`Please do not work on a new feature without first raising a "Feature Request Issue" as you might be working on a feature that is not needed in the project.` <br>
Start with the Title of your feature and Description stating why the feature should be implemented.

After raising an Issue, you would receive a response from the project maintainers for approval or disapproval.


### Helpful Resources

- [Pro GIT Book](https://git-scm.com/book/en/v2)

- [Try Git](https://try.github.io/)

- [Git/ Git Hub on Windows](https://www.youtube.com/watch?v=J_Clau1bYco)


For a complete guide on contributing, please visit our [resources](https://github.com/oscafrica/docs).

## Versioning

We use [Git](https://git-scm.com/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags).

## Authors

* [Samson Goddy](https://github.com/Samswag)
* [Ada Nduka Oyom](https://github.com/Kolokodess)

## License

This project is licensed under the Creative Commons Attribution 3.0 Unported - see the [LICENSE.txt](LICENSE.txt) file for more details.
