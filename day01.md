What is SCM (Source Code Management) ?
Source Code Management (SCM) refers to the practice of tracking and managing changes to source code throughout the development lifecycle. SCM systems help developers handle versions, coordinate work among team members, and maintain a history of changes.
Version Control: SCM tools keep track of different versions of code. This allows developers to see changes over time, revert to previous versions if necessary, and understand the evolution of the codebase.
Branching and Merging: SCM systems support branching, which allows developers to work on different features or fixes in parallel without affecting the main codebase. Merging brings changes from different branches back together, integrating different pieces of work.
Collaboration: SCM tools facilitate collaboration among multiple developers by allowing them to share and integrate their changes. This helps in avoiding conflicts and ensures that everyone is working with the latest version of the code.
History and Auditing: SCM maintains a detailed history of all changes, including who made each change, what was changed, and when. This history is valuable for tracking down bugs, understanding past decisions, and auditing the development process.
Backup and Recovery: By keeping a history of changes, SCM systems provide a backup of the codebase. If something goes wrong, you can revert to a previous state, minimizing the risk of losing work.
#
Storage (Any Code)
Developers (code)
Testing team (code)
DevOps (Scripts)
Different People from different teams can store simultaneously (save all changes separately )
Pipeline b/w offshore & onshore teams 
Help in achieving teamwork 
Track changes (Minute Level)
#Branching 
Product is the same, But diff tasks /ideas.
Each task/idea has one separate branch.
Finally, merge (code) all branches.
For parallel development /implement new ideas.
 Can create any no. of branches 
Changes are personal to that particular branch 
Can put files only in branches (not in the repo directly )
The default branch is “Main”

Files created in the workspace will be visible in any of the branch workspaces until you commit. Once you commit, then that file belongs to that particular branch.
#Why GIT Only 
Speed
Snapshot concept
Parallel branching 
Multiple Branches at a time unlike other SCM tools
Fully Distributed
The backup copy is available in multiple locations.
No need for an internet connection. So no network latency.
No need central server separately.
Each workspace will have its own repo internally.
Can create any no. of branches.
Can share code without using central repo.
That’s why we call GIT DVCS (Distributed Version Control system)
#IMP Termina
Snapshots
Get any previous version (backup)
Represent some data of particular time 
Stores the changes (append data) only. not whole copy. 
Commit
Store changes in the repo (will get commit ID)
40 Alphanumeric characters
Even if you change one dot, the commit ID will be changed.
Track the changes 
#git stages
Workspace
Physically see file & Modify
Staging/ Indexing area
Buffer area
Takes snapshot
Repository (Local)
Store changes locally
Repository (Central)
Store changes centrally 
#types of repo's
Bare Repositories (Central)
Store and share only
All central repositories are bare repositories 
Non - Bare Repositories (Local)
Where you can modify the files
All local repositories are non-bare repositories
