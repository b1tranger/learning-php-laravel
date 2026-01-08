
Setup Tutorial: https://youtu.be/NZ2PtObTtpo

--- 

The "Cannot edit in read-only editor" message in VS Code generally indicates that you are trying to type in a panel that is not designed for input or that the file itself has restrictions. 

Here are common solutions depending on the cause:

### 1. When Running Code (Entering User Input)

The most frequent cause of this error is trying to provide input in the Output panel, which is read-only. You need to run your code in the interactive Terminal instead. 

For users of the Code Runner extension:

* Open VS Code Settings by pressing Ctrl + , (Windows/Linux) or Cmd + , (macOS).

* Search for "run code" in the settings search bar.

* Locate the setting "Code Runner: Run In Terminal" and ensure the checkbox is marked as true.

* Restart VS Code and run your code again. It should now execute in the Terminal tab where you can type input.

For all users:

* Instead of using a "Run" button that outputs to the Output panel, use the integrated terminal (Ctrl + Shift + ) and run your program manually (e.g., python your_file.py or ./a.out for compiled languages).

Alternatively, use the built-in debugging feature (F5) which uses the terminal for interactive input by default. 

### 2. When Editing a File in a Diff View

If you are using source control (like Git) and performing a file comparison, the left-hand side of the split screen is often a read-only version of the previous file state. 

To edit the file, close the diff view and open the working file from the Explorer panel. 

### 3. When Editing Settings or Other VS Code Files

You cannot directly edit the Default Settings file in VS Code because it is read-only by design. 

To change settings, open the User Settings or Workspace Settings JSON file instead via the Command Palette (Ctrl + Shift + P or Cmd + Shift + P) and selecting "Preferences: Open User Settings (JSON)". 

### 4. Other Potential Causes

File System Permissions: The file or folder may be marked as read-only at the operating system level. Right-click the file in your OS's file explorer, select Properties, and uncheck the "Read-only" attribute.

Vim Extension: If you have the Vim extension installed, you need to press i (insert), a (append), or o (open line) to enter an editable mode.

Stuck Processes/Extensions:

Restart VS Code.

If the issue persists, try disabling all extensions (Extensions: Disable all installed extensions in the Command Palette) to see if an extension is causing a conflict.

Ensure there are no pending dialog boxes or incomplete actions in the Source Control tab. 