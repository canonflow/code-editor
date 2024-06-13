import Split from "split.js";

const splitPane = (pane1, pane2) => {
    return Split([pane1, pane2], {
        sizes: [35, 65],
        minSize: 400
    });
}

window.splitPane = splitPane;
